describe('Group of tests for the routes of the works', () => {
	it('Tests the /works route exists', () => {
		cy.visit('/works');

		cy.contains('h2', 'Travaux étudiants');
	});
});
