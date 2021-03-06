<?php

uses(Tests\TestCase::class);

it('can render properly', function () {
    $this->assertComponentRenders(
        '<span class="inline-flex items-center text-green-500 font-semibold">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>

            <span class="inline-block ml-1">0%</span>
        </span>',
        '<x-variance />'
    );
});

it('can render properly when variance is > 0', function () {
    $this->assertComponentRenders(
        '<span class="inline-flex items-center text-green-500 font-semibold">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>

            <span class="inline-block ml-1">4%</span>
        </span>',
        '<x-variance variance="4" />'
    );
});

it('can render properly when variance is < 0', function () {
    $this->assertComponentRenders(
        '<span class="inline-flex items-center text-red-500 font-semibold">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>

            <span class="inline-block ml-1">-4%</span>
        </span>',
        '<x-variance variance="-4" />'
    );
});

it('can render uncolored variance', function () {
    $this->assertComponentRenders(
        '<span class="inline-flex items-center font-semibold">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>

            <span class="inline-block ml-1">0%</span>
        </span>',
        '<x-variance uncolored />'
    );
});
