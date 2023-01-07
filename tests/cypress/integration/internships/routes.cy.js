describe('Group of tests for the routes of the internships page', () => {

	it('Test the /internships route exists', () => {
		cy.visit('/internships');

		cy.contains('h2', 'Stages');
	});

	it('Test the /internships/{internship:slug} route exists', () => {
		cy.refreshDatabase();
		cy.seed();

		cy.create('App\\Models\\Internship', { title: 'test', slug: 'test', company_id: 1 });

		cy.visit('/internships/test');

		cy.contains('h2', 'test');
	});
});
