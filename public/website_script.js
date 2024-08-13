var bookingObject = {};
document.addEventListener('DOMContentLoaded', function () {
    const stepButtons = document.querySelectorAll('.step-button');
    const progress = document.querySelector('#progress');
    const nextButtons = document.querySelectorAll('.next-step-button'); // Assuming 'Next' button has this class

    let currentIndex = 0;

    function updateStep(index) {
        // Update progress bar
        progress.setAttribute('value', index * 100 / (stepButtons.length - 1));

        // Update step buttons
        stepButtons.forEach((item, secIndex) => {
            if (index > secIndex) {
                item.classList.add('done');
            } else {
                item.classList.remove('done');
            }
        });

        // Show the current step and hide others
        stepButtons.forEach((button, stepIndex) => {
            const target = document.querySelector(button.getAttribute('data-bs-target'));
            if (stepIndex === index) {
                target.classList.add('show');
                target.classList.remove('collapse');
            } else {
                target.classList.remove('show');
                target.classList.add('collapse');
            }
        });
    }

    stepButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            currentIndex = index;
            updateStep(currentIndex);
        });
    });

    nextButtons.forEach((button) => {
        button.addEventListener('click', () => {
            if (currentIndex < stepButtons.length - 1) {
                currentIndex++;
                updateStep(currentIndex);
                console.log(bookingObject);
                console.log($('#time-slot-input').val());
            }
        });
    });

    // Initial setup
    // updateStep(currentIndex);


    Array.from(stepButtons).forEach((button, index) => {
        button.addEventListener('click', () => {
            progress.setAttribute('value', index * 100 / (stepButtons.length - 1));//there are 3 buttons. 2 spaces.

            stepButtons.forEach((item, secindex) => {
                if (index > secindex) {
                    item.classList.add('done');
                }
                if (index < secindex) {
                    item.classList.remove('done');
                }
            })
        })
    })
});




// const stepButtons = document.querySelectorAll('.step-button');
// const progress = document.querySelector('#progress');



document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.custom-card');

    cards.forEach(card => {
        card.addEventListener('click', function () {
            // Remove 'highlighted' class from all cards
            cards.forEach(c => c.classList.remove('highlighted'));

            // Add 'highlighted' class to the clicked card
            this.classList.add('highlighted');

            // Get the center ID from the data attribute
            const centerId = this.getAttribute('data-center-id');
            const $centerElement = $(`#card-${centerId}`);

            bookingObject.centerId = centerId;
            bookingObject.center = {
                id: centerId,
                title: $centerElement.find('.card-title').text(),
                region: $centerElement.find('.card-text').text(),
            }

            $('.center-name-final').html(`${bookingObject.center.title} <br> ${bookingObject.center.region}`)

            // Fetch services for the selected center
            fetchServices(centerId);
        });
    });

    async function fetchServices(centerId) {
        try {
            const response = await fetch(`/website-center-services/${centerId}`);
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const services = await response.json();

            // Get the container where services will be displayed
            const servicesContainer = document.getElementById('services-container');

            // Clear existing content
            servicesContainer.innerHTML = '';

            // Loop through the services and create HTML elements
            services.forEach(service => {
                const serviceCard = document.createElement('div');
                serviceCard.id = `custom-card-service-${service.id}`;
                serviceCard.className = 'col custom-card-service';
                serviceCard.setAttribute('data-service-id', service.id); // Set data-service-id attribute

                serviceCard.innerHTML = `
                    <div class="card-body">
                        <img src="${service.logo}" alt="${service.name}" class="img-fluid mb-2" />
                        <h5 class="card-title">${service.name}</h5>
                        <p class="card-text">${service.duration}</p>
                        <div class="rating mt-4">
                            ${Array(service.rating ?? 4).fill('<i class="bi bi-star-fill" style="color: rgb(60, 139, 60);"></i>').join('')}
                            <i class="bi bi-google"></i>
                        </div>
                        <h4 class="card-price">${service.price} €</h4>
                    </div>
                `;

                servicesContainer.appendChild(serviceCard);

                // Add click event listener to the newly created service card
                serviceCard.addEventListener('click', function (event) {
                    // Prevent the event from bubbling up to the container
                    event.stopPropagation();

                    // Remove 'highlighted-service' class from all service cards
                    document.querySelectorAll('.custom-card-service').forEach(sc => sc.classList.remove('highlighted-service'));

                    // Add 'highlighted-service' class to the clicked service card
                    this.classList.add('highlighted-service');

                    // Get the selected service ID
                    const serviceId = this.getAttribute('data-service-id');

                    const $serviceElement = $(`#custom-card-service-${serviceId}`);

                    bookingObject.serviceId = serviceId;
                    bookingObject.service = {
                        serviceName: $serviceElement.find('.card-title').text(),
                        duration: $serviceElement.find('.card-text').text(),
                        price: $serviceElement.find('.card-price').text()
                    }
                    $('.duration-final').text(bookingObject.service.duration);
                    $('.price-final').text(bookingObject.service.price)
                    $('.service-final').text(bookingObject.service.serviceName)


                    // You can use the serviceId for further processing
                });
            });

        } catch (error) {
            console.error('Error fetching services:', error);
        }
    }

    $('#time-slot-picker').timeSlotPicker(
        {
            startTime: '00:00',
            endTime: '24:00',
            timeStep: '60',
            defaultDate: new Date(),
            maxDateTime: '2030-06-01 13:15',
            minDateTime: '2024-01-01 10:15',
            minDayTime: '01:00',
            maxDayTime: '23:00',
            inputElementSelector: '#time-slot-input'
        }
    );
});


