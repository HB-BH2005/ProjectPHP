// Highlight the active navigation link
document.addEventListener('DOMContentLoaded', () => {    
  const currentPage = window.location.pathname.split('/').pop().toLowerCase(); // Get the current file name
  const navLinks = document.querySelectorAll('.aside .nav li a');

  navLinks.forEach(link => {
    const linkHref = link.getAttribute('href').toLowerCase(); // Normalize to lowercase
    if (currentPage === linkHref) {
      link.classList.add('active');
    }
  });
});

// Modal functionality for login
const loginModal = document.getElementById('login-modal');
const openLoginModal = document.getElementById('open-login-modal');
const closeLoginModal = document.getElementById('close-login-modal');

// Modal functionality for register
const registerModal = document.getElementById('register-modal');
const openRegisterModal = document.getElementById('open-register-modal');
const closeRegisterModal = document.getElementById('close-register-modal');

// Open login modal
openLoginModal.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default link behavior
    loginModal.style.display = 'flex'; // Show login modal
});

// Close login modal
closeLoginModal.addEventListener('click', () => {
    loginModal.style.display = 'none'; // Hide login modal
});

// Open register modal
openRegisterModal.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default link behavior
    registerModal.style.display = 'flex'; // Show register modal
});

// Close register modal
closeRegisterModal.addEventListener('click', () => {
    registerModal.style.display = 'none'; // Hide register modal
});

// Close modals when clicking outside the modal content
window.addEventListener('click', (e) => {
    if (e.target === loginModal) {
        loginModal.style.display = 'none';
    }
    if (e.target === registerModal) {
        registerModal.style.display = 'none';
    }
});

// Get the top-bar element
const topBar = document.querySelector('.top-bar');

// Add a scroll event listener
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        // Add the 'scrolled' class when scrolling down
        topBar.classList.add('scrolled');
    } else {
        // Remove the 'scrolled' class when at the top
        topBar.classList.remove('scrolled');
    }
});

function handleFormSubmit(event) {
    event.preventDefault();
    const form = event.target;

    fetch(form.action, {
        method: form.method,
        body: new FormData(form),
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
        if (response.ok) {
            alert("Your message has been sent successfully!");
        } else {
            alert("Failed to send your message. Please try again.");
        }
    }).catch(() => {
        alert("An error occurred. Please try again.");
    });
}