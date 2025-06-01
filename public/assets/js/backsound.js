document.addEventListener("DOMContentLoaded", function () {
    // Cek apakah audio sudah pernah dibuat
    if (!document.getElementById("globalBacksound")) {
        const audio = document.createElement("audio");
        audio.id = "globalBacksound";
        audio.src = base_url + "/sound/Backsoundd.mp3"; // bisa diganti dinamis
        audio.loop = true;

        // Ambil dari localStorage
        const savedVol = localStorage.getItem("volumeLevel") || 0.5;
        const isMuted = localStorage.getItem("isMuted") === "true";
        audio.volume = savedVol;
        audio.muted = isMuted;

        document.body.appendChild(audio);
        audio.play().catch(() => { });
    }

    const audioEl = document.getElementById("globalBacksound");
    const volumeSlider = document.getElementById("volumeControl");
    const toggleSound = document.getElementById("toggleSound");

    // Volume control
    if (volumeSlider) {
        volumeSlider.value = audioEl.volume;
        volumeSlider.addEventListener("input", (e) => {
            audioEl.volume = e.target.value;
            localStorage.setItem("volumeLevel", e.target.value);
        });
    }

    // Mute/unmute
    if (toggleSound) {
        toggleSound.textContent = audioEl.muted ? "🔇" : "🔊";
        toggleSound.addEventListener("click", () => {
            audioEl.muted = !audioEl.muted;
            toggleSound.textContent = audioEl.muted ? "🔇" : "🔊";
            localStorage.setItem("isMuted", audioEl.muted);
        });
    }
});
