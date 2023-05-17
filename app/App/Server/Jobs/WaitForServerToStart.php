<?php

declare(strict_types=1);

namespace App\Server\Jobs;

use App\Server\Notifications\ServerUnreachable;
use Domain\SecureShell\Facades\ShellProcessRunner;
use Domain\Server\Models\Server;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Process\Process;

final class WaitForServerToStart implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public int $failureCount = 0;

    public function __construct(public Server $server)
    {
    }

    public function handle() : void
    {
        if ($this->server->isOnline()) {
            return;
        }

        if ($this->reachable()) {
            $this->server->markAsOnline();

            return;
        }

        $this->server->token->collaborators->each->notify(new ServerUnreachable($this->server));
    }

    public function reachable() : bool
    {
        while ($this->failureCount <= 5) {
            $process = new Process(['ping', '-c 3', '-i 5', $this->server->ip_address]);
            $process->setTimeout(15);

            $response = ShellProcessRunner::run($process);

            if ($response->exitCode === 0) {
                break;
            }

            $this->failureCount++;
        }

        return $this->failureCount < 3;
    }
}
