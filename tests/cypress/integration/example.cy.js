describe('Example Test', () => {
	beforeEach(() => {
		cy.refreshDatabase();
		cy.seed();
	});
	it('shows a homepage', () => {
		cy.visit('/');

		cy.contains('Laravel');
	});
});
