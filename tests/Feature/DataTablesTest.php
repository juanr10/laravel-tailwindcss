<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\DataTables;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DataTablesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function data_tables_livewire_component_exist_test()
    {
        $this->get('/data-tables')->assertSeeLivewire('data-tables');
    }

    /** @test */
    // function data_tables_active_checkbox_works_correctly_test()
    // {
    //     $userA = User::create([
    //         'name' => 'User',
    //         'email' => 'user@user.com',
    //         'password' => bcrypt('password'),
    //         'active' => true
    //     ]);

    //     $userB = User::create([
    //         'name' => 'Another',
    //         'email' => 'another@another.com',
    //         'password' => bcrypt('password'),
    //         'active' => false
    //     ]);

    //     dd($userA, $userB);

    //     Livewire::test(DataTables::class)
    //         ->assertSee($userA->name)
    //         ->assertDontSee($userB->name)
    //         ->set('active', false)
    //         ->assertSee($userB->name)
    //         ->assertDontSee($userA->name);
    // }

      /** @test */
    //   public function datatables_searches_name_correctly()
    //   {
    //       $userA = User::create([
    //           'name' => 'User',
    //           'email' => 'user@user.com',
    //           'password' => bcrypt('password'),
    //           'active' => true,
    //       ]);

    //       $userB = User::create([
    //           'name' => 'Another',
    //           'email' => 'another@another.com',
    //           'password' => bcrypt('password'),
    //           'active' => true,
    //       ]);

    //       Livewire::test(DataTables::class)
    //           ->assertSee($userA->name)
    //           ->assertSee($userB->name)
    //           ->set('search', 'user')
    //           ->assertSee($userA->name)
    //           ->assertDontSee($userB->name);
    //   }

    /** @test */
    public function datatables_searches_name_correctly()
    {
        $userA = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'active' => true,
        ]);

        $userB = User::create([
            'name' => 'Another',
            'email' => 'another@another.com',
            'password' => bcrypt('password'),
            'active' => false,
        ]);

        Livewire::test(DataTables::class)
            ->set('search', 'user')
            ->assertSee($userA->name)
            ->assertDontSee($userB->name);
    }

    /** @test */
    public function datatables_searches_email_correctly()
    {
        $userA = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'active' => true,
        ]);

        $userB = User::create([
            'name' => 'Another',
            'email' => 'another@another.com',
            'password' => bcrypt('password'),
            'active' => false,
        ]);

        Livewire::test(DataTables::class)
            ->set('search', 'user@user.com')
            ->assertSee($userA->name)
            ->assertDontSee($userB->name);
    }

    /** @test */
    // public function datatables_sorts_name_asc_correctly()
    // {
    //     $userC = User::create([
    //         'name' => 'Cathy C',
    //         'email' => 'cathy@cathy.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userA = User::create([
    //         'name' => 'Andre A',
    //         'email' => 'andre@andre.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userB = User::create([
    //         'name' => 'Brian B',
    //         'email' => 'brian@brian.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     Livewire::test(DataTables::class)
    //         ->call('sortBy', 'name')
    //         ->assertSeeInOrder(['Andre A', 'Brian B', 'Cathy C']);
    // }

    /** @test */
    // public function datatables_sorts_name_desc_correctly()
    // {
    //     $userC = User::create([
    //         'name' => 'Cathy C',
    //         'email' => 'cathy@cathy.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userA = User::create([
    //         'name' => 'Andre A',
    //         'email' => 'andre@andre.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userB = User::create([
    //         'name' => 'Brian B',
    //         'email' => 'brian@brian.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     Livewire::test(DataTables::class)
    //         ->call('sortBy', 'name')
    //         ->call('sortBy', 'name')
    //         ->assertSeeInOrder(['Cathy C', 'Brian B', 'Andre A']);
    // }

    /** @test */
    // public function datatables_sorts_email_asc_correctly()
    // {
    //     $userC = User::create([
    //         'name' => 'Cathy C',
    //         'email' => 'cathy@cathy.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userA = User::create([
    //         'name' => 'Andre A',
    //         'email' => 'andre@andre.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userB = User::create([
    //         'name' => 'Brian B',
    //         'email' => 'brian@brian.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     Livewire::test(DataTables::class)
    //         ->call('sortBy', 'email')
    //         ->assertSeeInOrder(['Andre A', 'Brian B', 'Cathy C']);
    // }

    /** @test */
    // public function datatables_sorts_email_desc_correctly()
    // {
    //     $userC = User::create([
    //         'name' => 'Cathy C',
    //         'email' => 'cathy@cathy.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userA = User::create([
    //         'name' => 'Andre A',
    //         'email' => 'andre@andre.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     $userB = User::create([
    //         'name' => 'Brian B',
    //         'email' => 'brian@brian.com',
    //         'password' => bcrypt('password'),
    //         'active' => true,
    //     ]);

    //     Livewire::test(DataTables::class)
    //         ->call('sortBy', 'email')
    //         ->call('sortBy', 'email')
    //         ->assertSeeInOrder(['Cathy C', 'Brian B', 'Andre A']);
    // }
}
