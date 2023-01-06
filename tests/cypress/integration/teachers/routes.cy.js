describe('Group of tests for the routes of the teachers page', () => {

	it('Test the /teachers route exists', () => {
		cy.visit('/teachers');

		cy.contains('h2', 'Professeurs');
	});
});
