describe('Group of tests for the routes of the alumnis page', () => {

	it('Test the /alumnis route exists', () => {
		cy.visit('/alumnis');

		cy.contains('h2', 'Anciens');
	});
});
