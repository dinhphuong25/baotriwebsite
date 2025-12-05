// Progress Bar Animation
function animateProgress() {
    const fill = document.querySelector('.progress-fill');
    const percent = document.querySelector('.progress-percent');
    let width = 0;
    const target = 75;

    const interval = setInterval(() => {
        if (width >= target) {
            clearInterval(interval);
        } else {
            width++;
            fill.style.width = width + '%';
            percent.textContent = width + '%';
        }
    }, 20);
}

// Countdown Timer
function startTimer() {
    const timerEl = document.getElementById('timer');
    let totalSeconds = 2 * 3600 + 45 * 60 + 12;

    setInterval(() => {
        totalSeconds--;
        if (totalSeconds < 0) totalSeconds = 0;

        const h = Math.floor(totalSeconds / 3600);
        const m = Math.floor((totalSeconds % 3600) / 60);
        const s = totalSeconds % 60;

        timerEl.textContent = `${pad(h)}:${pad(m)}:${pad(s)}`;
    }, 1000);
}

function pad(num) {
    return num.toString().padStart(2, '0');
}

// Form Handler
document.getElementById('notifyForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = e.target.querySelector('button');
    const input = e.target.querySelector('input');

    const originalText = btn.textContent;
    btn.textContent = 'Đang đăng ký...';
    btn.style.opacity = '0.8';

    setTimeout(() => {
        btn.textContent = 'Thành công!';
        btn.style.background = '#22c55e';
        btn.style.opacity = '1';
        input.value = '';
        input.disabled = true;
        input.placeholder = "Đã đăng ký nhận tin!";
    }, 1000);
});

// Init
document.addEventListener('DOMContentLoaded', () => {
    animateProgress();
    startTimer();
});
