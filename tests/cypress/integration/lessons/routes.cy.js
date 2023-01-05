describe('Group of tests for the routes of the lessons', () => {

	it('Test the /lessons-grid route exists', () => {
		cy.visit('/lessons-grid');

		cy.contains('h2', 'Grille des cours');
	});
});
