describe('Group of tests for the routes of the internships page', () => {

	it('Test the /internships route exists', () => {
		cy.visit('/internships');

		cy.contains('h2', 'Stages');
	});
});
