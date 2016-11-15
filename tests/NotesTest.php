<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{

	use WithoutMiddleware;

	public function test_notes_list()
	{

		//Having
		Note::create(['note' => 'Mi primera nota']);
		Note::create(['note' => 'Mi segunda nota']);

		//When
		$this->visit('notes')
			//Then
			->see('Mi primera nota')
			->see('Mi segunda nota');
	}

	public function test_create_note()
	{
		$this->visit('notes')
			->click('Añadir una nota')
			->seePageIs('notes/create')
			->see('Crear una nota')
			->type('Una nueva nota', 'note')
			->press('Crear Nota')
			->seePageIs('notes')
			->see('Una nueva nota')
			->seeInDatabase('notes',[
				'note' => 'Una nueva nota'
			]);
	}

}
