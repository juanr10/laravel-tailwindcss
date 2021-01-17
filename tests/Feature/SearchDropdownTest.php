<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\SearchDropdown;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchDropdownTest extends TestCase
{
    /** @test */
    function search_drop_down_form_livewire_component_exists_test()
    {
        $this->get('/menu')->assertSeeLivewire('search-dropdown');
    }

    /** @test */
    function search_dropdown_searches_correctly_if_song_exists_test()
    {
        Livewire::test(SearchDropdown::class)
        ->assertDontSee('Harry styles')
        ->set('search', 'Golden')
        ->assertSee('Harry Styles');
    }

    /** @test */
    function search_dropdown_shows_message__if_no_song_exists_test()
    {
        Livewire::test(SearchDropdown::class)
        ->set('search', 'htyrhjuyj')
        ->assertSee('No results found for');
    }
}
