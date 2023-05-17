@php
['pageName' => $pageName, 'urlParams' => $urlParams] = ARKEcosystem\Foundation\UserInterface\UI::getPaginationData($paginator);
@endphp
<div
    x-data="Pagination('{{ $pageName }}', {{ $paginator->lastPage() }})"
    class="pagination-wrapper"
>
    <div class="relative pagination-pages-mobile">
        <form x-show="search" name="searchForm" type="get" class="flex overflow-hidden absolute left-0 z-10 px-2 w-full h-full rounded bg-theme-primary-100 dark:bg-theme-secondary-800">
            <input
                x-model.number="page"
                type="number"
                min="1"
                max="{{ $paginator->lastPage() }}"
                name="{{ $pageName }}"
                placeholder="{{ trans('ui::actions.enter_the_page') }}"
                class="py-2 px-3 w-full bg-transparent dark:text-theme-secondary-200"
                x-on:blur="blurHandler"
            />
            @foreach($urlParams as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ $value }}" />
            @endforeach
            <button type="submit" class="p-2 text-theme-secondary-500 transition-default dark:text-theme-secondary-200 hover:text-theme-primary-500" :disabled="!page">
                <x-ark-icon name="magnifying-glass" size="sm" />
            </button>
            <button type="button" class="p-2 text-theme-secondary-500 transition-default dark:text-theme-secondary-200 hover:text-theme-primary-500" x-on:click="hideSearch()">
                <x-ark-icon name="cross" size="sm" />
            </button>
        </form>

        <button
            type="button"
            class="button-pagination-page-indicator button-pagination-page-indicator--search"
            :class="{ 'opacity-0': search }"
            x-on:click="toggleSearch"
        >
            <span>
                @lang('ui::generic.pagination.current_to', [
                    'currentPage' => $paginator->currentPage(),
                    'lastPage' => $paginator->lastPage()
                ])
            </span
        ></button>
    </div>

    <div class="flex space-x-3">
        @if($paginator->onFirstPage())
            <div class="flex items-center button-generic button-disabled">
                <span class="flex items-center">
                    <x-ark-icon name="arrows.double-chevron-left" size="xs" />
                </span>
            </div>
        @else
            <a class="flex" href="{{ $paginator->url(1) }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <div class="flex items-center">
                        <x-ark-icon name="arrows.double-chevron-left" size="xs" />
                    </div>
                </div>
            </a>
        @endif

        @if($paginator->onFirstPage())
            <div class="flex items-center button-generic button-disabled">
                <div class="flex items-center">
                    <span class="hidden lg:flex lg:ml-2">@lang('ui::generic.previous')</span>
                    <x-ark-icon class="inline-block lg:hidden" name="arrows.chevron-left" size="xs" />
                </div>
            </div>
        @else
            <a class="flex" href="{{ $paginator->previousPageUrl() }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <div class="flex items-center">
                        <span class="hidden lg:flex lg:ml-2">@lang('ui::generic.previous')</span>
                        <x-ark-icon class="inline-block lg:hidden" name="arrows.chevron-left" size="xs" />
                    </div>
                </div>
            </a>
        @endif

        <div class="relative">
            <form x-cloak x-show="search" name="searchForm" type="get" class="flex overflow-hidden absolute left-0 z-10 px-2 w-full h-full rounded bg-theme-primary-100 pagination-form-desktop dark:bg-theme-secondary-800">
                <input
                    x-ref="search"
                    x-model.number="page"
                    type="number"
                    min="1"
                    max="{{ $paginator->lastPage() }}"
                    name="{{ $pageName }}"
                    placeholder="{{ trans('ui::actions.enter_the_page_number') }}"
                    class="py-2 px-3 w-full bg-transparent dark:text-theme-secondary-200"
                    x-on:blur="blurHandler"
                />
                @foreach($urlParams as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}" />
                @endforeach
                <button type="submit" class="p-2 text-theme-secondary-500 transition-default dark:text-theme-secondary-200 hover:text-theme-primary-500" :disabled="!page">
                    <x-ark-icon name="magnifying-glass" size="sm" />
                </button>
                <button type="button" class="p-2 text-theme-secondary-500 transition-default dark:text-theme-secondary-200 hover:text-theme-primary-500" x-on:click="hideSearch">
                    <x-ark-icon name="cross" size="sm" />
                </button>
            </form>

            <div class="hidden px-2 rounded md:flex bg-theme-primary-100 flex-inline dark:bg-theme-secondary-800">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <button
                            x-on:click="toggleSearch"
                            type="button"
                            class="button-pagination-page-indicator button-pagination-page-indicator--search"
                            :class="{ 'opacity-0': search }"
                        >
                            <span class="button-pagination-search"><x-ark-icon name="magnifying-glass" size="sm" /></span>
                            <span class="button-pagination-ellipsis">{{ $element }}</span>
                        </button>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <a
                                href="{{ $url }}"
                                class="@if ($paginator->currentPage() === $page) button-pagination-page-indicator--selected @else button-pagination-page-indicator  @endif"
                            >
                                {{ $page }}
                            </a>
                        @endforeach
                    @endif
                @endforeach
            </div>

            <div class="md:hidden pagination-pages">
                <button
                    x-on:click="toggleSearch"
                    type="button"
                    class="button-pagination-page-indicator button-pagination-page-indicator--search"
                    :class="{ 'opacity-0': search }"
                >
                    <span>
                        @lang('ui::generic.pagination.current_to', [
                            'currentPage' => $paginator->currentPage(),
                            'lastPage' => $paginator->lastPage()
                        ])
                    </span>
                </button>
            </div>
        </div>

        @if($paginator->hasMorePages())
            <a class="flex" href="{{ $paginator->nextPageUrl() }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <div class="flex items-center">
                        <span class="hidden lg:flex lg:mr-2">@lang('ui::generic.next')</span>
                        <x-ark-icon class="inline-block lg:hidden" name="arrows.chevron-right" size="xs" />
                    </div>
                </div>
            </a>
        @else
            <div class="flex items-center button-generic button-disabled">
                <div class="flex items-center">
                    <span class="hidden lg:flex">@lang('ui::generic.next')</span>
                    <x-ark-icon class="inline-block lg:hidden" name="arrows.chevron-right" size="xs" />
                </div>
            </div>
        @endif

        @if($paginator->hasMorePages())
            <a class="flex" href="{{ $paginator->url($paginator->lastPage()) }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <span class="flex items-center">
                        <x-ark-icon name="arrows.double-chevron-right" size="xs" />
                    </span>
                </div>
            </a>
        @else
            <div class="flex items-center button-generic button-disabled">
                <span class="flex items-center">
                    <x-ark-icon name="arrows.double-chevron-right" size="xs" />
                </span>
            </div>
        @endif
    </div>
</div>