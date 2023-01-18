describe('Group of tests for the login of the admin panel', () => {

	it('Test the dashboard is shown on login', () => {
		cy.refreshDatabase();
		// cy.seed();
		cy.visit('/admin');

		cy.contains('h2', 'Anciens');
	});
});
