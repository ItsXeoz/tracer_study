import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
        const updateCounter = () => {
            const target = +counter.getAttribute("data-target");
            const count = +counter.innerText || 0; // Mulai dari 0 jika kosong
            const increment = Math.ceil(target / 200); // Kecepatan animasi

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCounter, 10); // Ulang setiap 10ms
            } else {
                counter.innerText = target; // Set angka akhir
            }
        };

        updateCounter();
    });

    console.log("Counter script berjalan!");

    // Float-in animation on scroll
    const floatInElements = document.querySelectorAll(".float-in");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.1 }
    );

    floatInElements.forEach((element) => {
        observer.observe(element);
    });
});
const employmentChartConfig = {
    series: [
        {
            name: "Total Individuals",
            data: [120, 80, 50, 70, 30], // Jumlah per kategori
        },
    ],
    chart: {
        type: "bar",
        height: 280,
        toolbar: {
            show: false,
        },
    },
    plotOptions: {
        bar: {
            columnWidth: "50%",
            borderRadius: 5,
        },
    },
    colors: ["#4A90E2"], // Warna biru
    dataLabels: {
        enabled: false,
    },
    xaxis: {
        categories: [
            "Bekerja (Full/Part Time)",
            "Wiraswasta",
            "Melanjutkan Pendidikan",
            "Tidak Bekerja tetapi Sedang Mencari Kerja",
            "Belum Memungkinkan Bekerja",
        ],
        labels: {
            style: {
                colors: "#4B5563",
                fontSize: "12px",
            },
        },
    },
    yaxis: {
        labels: {
            style: {
                colors: "#4B5563",
                fontSize: "12px",
            },
        },
        title: {
            text: "Jumlah Individu",
            style: {
                color: "#4B5563",
                fontSize: "14px",
            },
        },
    },
    grid: {
        borderColor: "#E5E7EB",
        strokeDashArray: 4,
    },
    tooltip: {
        theme: "light",
    },
};

const employmentChart = new ApexCharts(
    document.querySelector("#employment-chart"),
    employmentChartConfig
);

employmentChart.render();

const avatarButton = document.getElementById("avatarButton");
const avatarDropdown = document.getElementById("avatarDropdown");

avatarButton.addEventListener("click", (e) => {
    e.stopPropagation();
    avatarDropdown.classList.toggle("hidden");
});

document.addEventListener("click", () => {
    avatarDropdown.classList.add("hidden");
});

const toggleSidebar = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");

toggleSidebar.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
});

// Close sidebar on outside click in mobile view
document.addEventListener("click", (e) => {
    if (
        !sidebar.contains(e.target) &&
        !toggleSidebar.contains(e.target) &&
        window.innerWidth < 640
    ) {
        sidebar.classList.add("-translate-x-full");
    }
});


