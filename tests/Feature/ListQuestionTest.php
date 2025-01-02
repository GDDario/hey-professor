<?php

use App\Models\Question;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('Should list all the questions', function () {
    // Triple A
    // Arrange
    // Criar algumas perguntas
    $user = User::factory()->create();
    $questions = Question::factory()->count(5)->create();
    actingAs($user);

    // Act
    // Acessar a rota
    $response = get(route('dashboard'));

    // Assert
    // Verificar ase a lista de perguntas está sendo mostrada
    /** @var Question $q */
    foreach ($questions as $q) {
        $response->assertSee($q->question);
    }
});
