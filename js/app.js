document.addEventListener('DOMContentLoaded', function() {
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;

        // Check if the element is in the viewport (visible at least halfway)
        return rect.top < windowHeight * .5 && rect.bottom > windowHeight * 0.25;
    }

    const skdwCon = document.querySelector('.skdw-con');
    const gedCon = document.querySelector('.ged-con');
    const eduSection = document.querySelector('.edu-section');
    let hasAnimated = false;

    window.addEventListener('scroll', function() {
        // ตรวจสอบว่า animation ไม่ได้ทำงานแล้ว และ section อยู่ใน viewport
        if (isInViewport(eduSection) && !hasAnimated) {
            skdwCon.classList.add('fade-in-left');
            setTimeout(() => {
                gedCon.classList.add('fade-in-right');
            }, 1000);
            hasAnimated = true; // ป้องกันการเรียก animation ซ้ำ
        }
    });

    // ตรวจสอบตอนโหลดหน้า ถ้า section อยู่ใน viewport ให้เล่น animation
    if (isInViewport(eduSection) && !hasAnimated) {
        skdwCon.classList.add('fade-in-left');
        setTimeout(() => {
            gedCon.classList.add('fade-in-right');
        }, 1000);
        hasAnimated = true;
    }
});


document.querySelectorAll('.project').forEach(div => {
    div.addEventListener('click', function() {
        showAlert(this);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const alertDiv = document.querySelector('#custom-alert');
    const alertImage = document.getElementById('alert-image');
    const backdrop = document.querySelector('.backdrop');

    function showAlert(projectElement) {
        const backgroundImage = window.getComputedStyle(projectElement.querySelector('.projects-img')).backgroundImage;
        const imageUrl = backgroundImage.replace('url("', '').replace('")', '');
        alertImage.src = imageUrl; // ตั้งค่ารูปภาพใน custom alert
        alertDiv.style.display = 'flex';
        backdrop.classList.add('active'); // ใช้ active class เพื่อแสดง backdrop
    }

    function hideAlert() {
        alertDiv.style.display = 'none';
        backdrop.classList.remove('active');
    }

    document.querySelectorAll('.project').forEach(div => {
        div.addEventListener('click', function() {
            showAlert(this);
        });
    });

    // ปิด custom-alert เมื่อคลิกที่ backdrop
    backdrop.addEventListener('click', function() {
        hideAlert();
    });
});

// stat progression animation
document.addEventListener("DOMContentLoaded", function() {
    const statsSection = document.querySelector('.stats-section');
    const statLevels = document.querySelectorAll('.stat-level');

    // Function to animate the stats
    function animateStats() {
        statLevels.forEach(function(statLevel) {
            const percentDiv = statLevel.querySelector('.percent'); // Get the .percent div

            // ตรวจสอบว่ามี percentDiv หรือไม่
            if (!percentDiv) {
                console.error("percentDiv is null for statLevel", statLevel);
                return; // ข้ามไปถ้าไม่มี .percent element
            }

            const targetPercent = parseInt(percentDiv.textContent); // Get the percentage number

            // เริ่มต้นความกว้างที่ 0%
            statLevel.style.width = '0%'; 

            // ใช้ setTimeout เพื่อรอให้ CSS render ก่อนเปลี่ยนความกว้าง
            setTimeout(() => {
                statLevel.style.width = targetPercent + '%'; // Smooth transition of width
            }, 10); // delay a bit to allow CSS to kick in

            let currentPercent = 0;
            const interval = setInterval(function() {
                if (currentPercent >= targetPercent) {
                    clearInterval(interval);
                } else {
                    currentPercent++;
                    percentDiv.textContent = currentPercent + '%';
                }
            }, 20); // Speed of the percent increment
        });
    }

    // Create an Intersection Observer to detect when .stats-section is in view
    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats(); // Run the animation
                observer.unobserve(statsSection); // Stop observing after animation starts
            }
        });
    }, { threshold: 0.5 }); // Trigger when 50% of .stats-section is in view

    observer.observe(statsSection);
});