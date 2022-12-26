describe('Group to test the user can update their profile', () => {
	it('Tests the user can change their profile picture', () => {

		// Refresh the database to a known state
		cy.refreshDatabase();

		// Log the user in
		cy.login();

		// Navigate to the '/profile' page
		cy.visit('/profile');

		// Select the 'img' element with an 'id' of 'user-avatar'
		let imgElement = cy.get('img#user-avatar');

		// Declare the 'oldSrc' variable
		let oldSrc;
		imgElement.then(element => {

			// When the element is resolved, get the 'src' attribute and store it in 'oldSrc'
			oldSrc = element.attr('src');
		});

		// Select the file 'public/images/backend.png' in the 'input' element with a 'name' attribute of 'avatar'
		cy.get('input[name="avatar"]').selectFile('public/images/backend.png');

		// Click the 'button' element with an 'id' of 'profile-update-button'
		cy.get('#profile-update-button').click();

		// Wait for 1 second to give the server time to update the avatar
		cy.wait(1000);

		// Select the 'img' element with an 'id' of 'user-avatar' again
		imgElement = cy.get('img#user-avatar');

		// Declare the 'newSrc' variable
		let newSrc;
		imgElement.then(element => {
			// When the element is resolved, get the 'src' attribute and store it in 'newSrc'
			newSrc = element.attr('src');

			// Assert that 'oldSrc' is not equal to 'newSrc'
			expect(oldSrc).to.not.eq(newSrc);
		});
	})

	it('Tests the user can update their email', () => {
		// Refresh the database to a known state
		cy.refreshDatabase();

		// Log the user in
		cy.login();

		// Navigate to the '/profile' page
		cy.visit('/profile');

		// Update the email
		const newEmail = 'new@ema.il';
		cy.get('#email').clear().type(newEmail);

		// Submit the form
		cy.get('#profile-update-button').click();

		// Assert that the email was updated successfully
		cy.get('#current-email').should(el => {
			expect(el).to.contain(newEmail);
		});
	});

	it('Tests the user can update their password', () => {
		// Refresh the database to a known state
		cy.refreshDatabase();

		// Set the email and old password for the user
		const email = 'test@test.test';
		const oldPassword = 'change_this';

		// Create a new user
		cy.create('App\\Models\\User', { email: email });

		// Navigate to the '/login' page
		cy.visit('/login');

		// Enter the email and old password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(oldPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Update the password
		cy.get('#old_password').clear().type(oldPassword);

		const newPassword = 'change_that';
		cy.get('#password').clear().type(newPassword);
		cy.get('#password_confirmation').clear().type(newPassword);

		// Submit the form
		cy.get('#profile-update-button').click();

		// Log out the user
		cy.logout();

		// Navigate to the login page
		cy.visit('/login');

		// Enter the email and new password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(newPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Assert that the user is redirected to the '/profile' page
		cy.assertRedirect('/profile');
	});


	it('Tests the user can\'t update their password if the old password is wrong', () => {
		// Refresh the database to a known state
		cy.refreshDatabase();

		// Set the email and old password for the user
		const oldPassword = 'change_this';
		const email = 'test@test.test';

		// Create a new user
		cy.create('App\\Models\\User', { email: email });

		// Navigate to the '/login' page
		cy.visit('/login');

		// Set the wrong password to be used in the form
		const wrongPassword = 'change_that';

		// Enter the email and old password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(oldPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Attempt to update the password with the wrong password
		cy.get('#old_password').clear().type(wrongPassword);
		cy.get('#password').clear().type(wrongPassword);
		cy.get('#password_confirmation').clear().type(wrongPassword);

		// Submit the form
		cy.get('#profile-update-button').click();

		// Log out the user
		cy.logout();

		// Navigate to the login page
		cy.visit('/login');

		// Enter the email and new password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(wrongPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Assert that the user is redirected to the '/login' page
		cy.assertRedirect('/login');

		// Enter the email and new password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(oldPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Assert that the user is redirected to the '/profile' page
		cy.assertRedirect('/profile');
	})

	it('Tests the user can\'t update their password if the old password is empty', () => {
		// Refresh the database to a known state
		cy.refreshDatabase();

		// Set the email and old password for the user
		const oldPassword = 'change_this';
		const email = 'test@test.test';

		// Create a new user
		cy.create('App\\Models\\User', { email: email });

		// Navigate to the '/login' page
		cy.visit('/login');

		// Set the wrong password to be used in the form
		const wrongPassword = 'change_that';

		// Enter the email and old password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(oldPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Attempt to update the password with an empty password
		cy.get('#old_password').clear();
		cy.get('#password').clear().type(wrongPassword);
		cy.get('#password_confirmation').clear().type(wrongPassword);

		// Submit the form
		cy.get('#profile-update-button').click();

		// Log out the user
		cy.logout();

		// Navigate to the login page
		cy.visit('/login');

		// Enter the email and new password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(wrongPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Assert that the user is redirected to the '/login' page
		cy.assertRedirect('/login');

		// Enter the email and new password in the login form
		cy.get('#email').clear().type(email);
		cy.get('#password').clear().type(oldPassword);

		// Click the login button
		cy.get('#login-button').click();

		// Assert that the user is redirected to the '/profile' page
		cy.assertRedirect('/profile');
	});

	it('Tests the user can update their username', () => {
		// Refresh the database to a known state
		cy.refreshDatabase();

		// Log the user in
		cy.login();

		// Navigate to the '/profile' page
		cy.visit('/profile');

		// Update the username
		const newUsername = 'new-username';
		cy.get('#username').clear().type(newUsername);

		// Submit the form
		cy.get('#profile-update-button').click();

		// Assert that the username was updated successfully
		cy.get('#current-username').should(el => {
			expect(el).to.contain(newUsername);
		});
	});
})
