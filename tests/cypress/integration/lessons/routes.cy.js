describe('Group of tests for the routes of the lessons', () => {

	it('Test the /lessons-grid route exists', () => {
		cy.visit('/lessons-grid');

		cy.contains('h2', 'Grille des cours');
	});

	it('Tests the /lessons-grid/{lesson:slug} route exists', () => {
		cy.refreshDatabase();
		cy.seed();

		cy.create('App\\Models\\Lesson', { title: 'test', slug: 'test', year_id: 1 });

		cy.visit('/lessons-grid/test');

		cy.contains('h2', 'test');
	})
});
