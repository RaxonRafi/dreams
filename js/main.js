function updateTimes() {
    const brasiliaTime = new Date().toLocaleString('en-US', {
        timeZone: 'America/Sao_Paulo',
        hour: 'numeric',
        minute: 'numeric',
        hour12: false
    });

    const lisbonTime = new Date().toLocaleString('en-US', {
        timeZone: 'Europe/Lisbon',
        hour: 'numeric',
        minute: 'numeric',
        hour12: false
    });

    document.querySelector('.brasilia-time').textContent = brasiliaTime;
    document.querySelector('.pt-time').textContent = lisbonTime;
}

// Call the function initially to set the time
updateTimes();

// Update the times every second (1000 milliseconds)
setInterval(updateTimes, 1000);