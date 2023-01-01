describe('Group of tests for the routes of the blog', () => {

	it('Test the /blog route exists', () => {
		cy.visit('/blog');

		cy.contains('h2', 'Blog');
	});

	it('Test the /blog/{post:slug} route exists', () => {
		cy.refreshDatabase();
		cy.create('App\\Models\\Post', { title: 'test', slug: 'test' });

		cy.visit('/blog/test');

		cy.contains('h2', 'test');
	});
});
