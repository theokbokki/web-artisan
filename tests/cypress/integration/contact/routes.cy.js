describe('Group of tests for the routes of the contact page', () => {

	it('Test the /contact route exists', () => {
		cy.visit('/contact');

		cy.contains('h2', 'Contact');
	});
});
