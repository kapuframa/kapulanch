<?php

declare(strict_types=1);

return [
    'email'                 => 'Email',
    'email_address'         => 'Email Address',
    'password'              => 'Password',
    'new_password'          => 'New Password',
    'name'                  => 'Name',
    'first_name'            => 'First Name',
    'last_name'             => 'Last Name',
    'current_password'      => 'Current Password',
    'confirm_password'      => 'Confirm Password',
    'password_requirements' => 'The password must be 12–128 characters, and include a number, a symbol, a lower and an upper case letter.',
    'emergency_token'       => 'Emergency Token',
    'authentication_token'  => 'Authentication Token',
    'message'               => 'Message',
    'subject'               => 'Subject',
    'optional'              => 'Optional',
    'create_token'          => [
        'logo'                                     => 'Blockchain Logo',
        'input_chain_name'                         => 'Name',
        'input_chain_name_placeholder'             => 'MyChain',
        'input_config'                             => 'Configuration',
        'input_token'                              => 'Ticker Symbol',
        'input_token_placeholder'                  => 'MYN',
        'input_symbol'                             => 'Symbol',
        'input_symbol_placeholder'                 => 'Ѧ',
        'input_mainnet_prefix'                     => 'Production',
        'input_mainnet_prefix_placeholder'         => 'P',
        'input_devnet_prefix'                      => 'Development',
        'input_devnet_prefix_placeholder'          => 'D',
        'input_testnet_prefix'                     => 'Test',
        'input_testnet_prefix_placeholder'         => 'T',
        'input_forgers'                            => 'Number of Forgers',
        'input_forgers_placeholder'                => '51',
        'input_blocktime'                          => 'Blocktime (seconds)',
        'input_blocktime_placeholder'              => '8',
        'input_transactions_per_block'             => 'Max Transactions per Block',
        'input_transactions_per_block_placeholder' => '150',
        'input_total_premine'                      => 'Total Premine',
        'input_max_block_payload'                  => 'Max payload length by Block',
        'input_max_block_payload_placeholder'      => '2097152',
        'input_total_premine'                      => 'Total Premine',
        'input_total_premine_placeholder'          => '12500000000000000',
        'input_reward_height_start'                => 'Reward Height Start',
        'input_reward_height_start_placeholder'    => '75600',
        'input_reward_per_block'                   => 'Reward per Block',
        'input_reward_per_block_placeholder'       => '200000000',
        'input_vendor_field_length'                => 'Vendor Field Length (Bytes)',
        'input_vendor_field_length_placeholder'    => '255',
        'input_wif'                                => 'Wallet Input Format (Number)',
        'input_wif_placeholder'                    => '1',
        'input_p2p_port'                           => 'P2P',
        'input_p2p_port_placeholder'               => '4000',
        'input_api_port'                           => 'Public API',
        'input_api_port_placeholder'               => '4003',
        'input_webhook_port'                       => 'Webhooks',
        'input_webhook_port_placeholder'           => '4004',
        'input_monitor_port'                       => 'Monitor',
        'input_monitor_port_placeholder'           => '4005',
        'input_explorer_port'                      => 'Explorer',
        'input_explorer_port_placeholder'          => '4200',
        'input_database_host'                      => 'Host',
        'input_database_host_placeholder'          => '127.0.0.1',
        'input_database_port'                      => 'Port',
        'input_database_port_placeholder'          => '5432',
        'input_database_name'                      => 'Name',
        'input_database_name_placeholder'          => 'core_blockchain',
        'input_enabled'                            => 'Enabled',
        'input_static'                             => 'Static Fee (Satoshis)',
        'input_addon_bytes'                        => 'Add-On for Dynamic Fee (Bytes)',

        'input_option_yes'             => 'Yes',
        'input_option_no'              => 'No',

        'static' => [
            'transfer_placeholder'                           => '10000000',
            'second_signature_placeholder'                   => '500000000',
            'delegate_registration_placeholder'              => '2500000000',
            'vote_placeholder'                               => '100000000',
            'multi_signature_placeholder'                    => '500000000',
            'ipfs_placeholder'                               => '500000000',
            'multi_payment_placeholder'                      => '10000000',
            'delegate_resignation_placeholder'               => '250000000',
        ],
        'dynamic' => [
            'min_fee_pool_placeholder'                       => '3000',
            'min_fee_broadcast_placeholder'                  => '3000',
            'addon_bytes'                                    => [
                'transfer_placeholder'                           => '100',
                'second_signature_placeholder'                   => '250',
                'delegate_registration_placeholder'              => '400000',
                'vote_placeholder'                               => '100',
                'multi_signature_placeholder'                    => '500',
                'ipfs_placeholder'                               => '250',
                'multi_payment_placeholder'                      => '500',
                'delegate_resignation_placeholder'               => '400000',
            ],
        ],
        'transaction_pool'                               => 'Transaction Pool',
        'min_fee_pool'                                   => 'Min Fee Pool (Satoshis)',
        'min_fee_broadcast'                              => 'Min Fee Broadcast (Satoshis)',
        'transfer'                                       => 'Transfer',
        'second_signature'                               => 'Second Signature',
        'delegate_registration'                          => 'Delegate Registration',
        'vote'                                           => 'Vote',
        'multi_signature'                                => 'Multisignature',
        'ipfs'                                           => 'IPFS',
        'multi_payment'                                  => 'Multipayments',
        'delegate_resignation'                           => 'Delegate Resignation',
    ],
    'create_server' => [
        'preset'                      => 'Node Type',
        'input_preset_seed'           => 'Seed',
        'input_preset_relay'          => 'Relay',
        'input_preset_forger'         => 'Forger',
        'input_preset_explorer'       => 'Explorer',
        'server_provider'             => 'Server Provider',
        'select_server_provider'      => 'Select a Provider API Key',
        'region'                      => 'Region',
        'plan'                        => 'Plan',
        'server_name'                 => 'Server Name',
        'mainnet'                     => 'Production',
        'devnet'                      => 'Development',
        'testnet'                     => 'Test',
        'forging_delegate_passphrase' => 'Enter forging delegate passphrase (BIP39)',
        'forging_delegate_password'   => 'Enter forging delegate password (BIP38, optional)',
        'passphrases_warning'         => 'ARKLauncher does not store any passphrases that get entered to configure a Forger. Once the Forger has been deployed, all passphrases are removed.',
        'invalid_bip38'               => 'The given password is not a BIP38 Password. Please enter a valid BIP38 password to continue.',
        'missing_server_provider'     => 'To configure the Genesis node, you must first add a <a href=:route><strong>Server Provider</strong></a>',
        'no_indexed_providers'        => 'No indexed server providers yet. Please try again later or get in touch with us if this message persists!',
    ],
    'create_server_provider' => [
        'profile_name'          => 'Profile Name',
        'profile_name_tooltip'  => 'A custom name to describe this connection',
        'type'                  => 'Type',
        'name'                  => 'Name',
        'access_token'          => 'Access Token',
        'access_key'            => 'Access Key',
        'access_secret'         => 'Access Secret',
    ],
    'invite_collaborator' => [
        'title'           => 'Manage your team members invitations.',
        'info'            => 'Please provide the email address of the person you would like to add to this Blockchain. The email address must be associated with an existing :appName account; however, Blockchain collaborators do not need to have a :appName subscription.',
        'permissions'     => 'Permissions',
        'send_invitation' => 'Send Invitation',
    ],
    'ssh_key'             => [
        'input_name'       => 'Name',
        'input_public_key' => 'Public Key',
    ],
    'token_details' => [
        'seeds'        => 'Seed Servers',
        'genesis_hash' => 'Genesis Hash',
        'api_port'     => 'API Port',

        'errors' => [
            'seeds' => 'At least 1 seed server is required.',
        ],
    ],
];
