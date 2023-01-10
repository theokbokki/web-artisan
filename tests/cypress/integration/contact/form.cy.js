describe('Group of tests for the contact form', () => {

	it('Tests the form isn\'t sent if the email is empty', () => {
		cy.visit('/contact');

		cy.get('#subject').clear().type('Super site!');
		cy.get('#message').clear().type('Super site vraiment! J\'ai passé un super moment, merci');
		cy.get('#contact_form_button').click();

		cy.wait(500);

		cy.contains('li', 'Le champ adresse e-mail est obligatoire.');
	});

	it('Tests the form isn\'t sent if the email is not formatted properly', () => {
		cy.visit('/contact');

		cy.get('#email').clear().type('cecinestpasunemail');
		cy.get('#subject').clear().type('Super site!');
		cy.get('#message').clear().type('Super site vraiment! J\'ai passé un super moment, merci');
		cy.get('#contact_form_button').click();

		cy.wait(500);

		cy.contains('li', 'Le champ adresse e-mail est obligatoire.');
	});
});
