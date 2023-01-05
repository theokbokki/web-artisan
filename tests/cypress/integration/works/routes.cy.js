describe('Group of tests for the routes of the works', () => {
	it('Tests the /works route exists', () => {
		cy.visit('/works');

		cy.contains('h2', 'Travaux étudiants');
	});

	it('Tests the /works/{work:slug} route exists', () => {
		cy.refreshDatabase();
		cy.seed();
		cy.create('App\\Models\\Work', { title: 'test', slug: 'test', user_id: '1' });

		cy.visit('/works/test');

		cy.contains('h2', 'test');
	});
});
