<?php

    use App\Models\User;

    test('login screen can be rendered', function () {
        $response = $this->get('/login');
        $response->assertStatus(200);
    });

    test('users can authenticate using the login screen', function () {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'south_african_id' => $user->south_african_id,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard.index', absolute: false));
    });

    test('users cannot authenticate with invalid password', function () {
        $user = User::factory()->create();

        $this->post('/login', [
            'south_african_id' => $user->south_african_id,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    });
