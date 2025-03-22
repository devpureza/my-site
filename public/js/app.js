// Tabs functionality for About section
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');
            
            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Show the corresponding tab content
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Animate skill bars when skills tab is visible
    const skillsTab = document.querySelector('[data-tab="skills"]');
    if (skillsTab) {
        skillsTab.addEventListener('click', () => {
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 50);
            });
        });
    }
}); 