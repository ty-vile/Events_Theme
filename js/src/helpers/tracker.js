// Select the elements you want to track
const headerElement = document.querySelector("#header");

// MULTIPLE ELEMENTS
// const fItemElements = document.querySelectorAll('.f-item');

// Options for the Intersection Observer
const options = {
  root: null, // Use the viewport as the root
  rootMargin: "0px", // No margin
  threshold: 0.2, // Trigger when 50% of the element is visible
};

// Callback function when an observed element is intersecting
const handleIntersection = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const element = entry.target;
      element.classList.add("in-view");
    } else {
      // Element is not in view
      // Perform your action here, e.g., remove a class, reset an animation, etc.
      return;
    }
  });
};

// Create an Intersection Observer instance
const observer = new IntersectionObserver(handleIntersection, options);

// Start observing the elements
observer.observe(headerElement);

// MULTIPLE ELEMENTS
// fItemElements.forEach(element => observer.observe(element));
