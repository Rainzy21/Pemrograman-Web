const weatherData = {
    "Malang": { 
        temperature: 30, condition: "Cerah" 
    },
    "Bandung": {
        temperature: 25, condition: "Hujan Ringan" 
    },
    "Berau": {
        temperature: 33, condition: "Panas Terik" 
    },
    "Samarinda": {
        temperature: 28, condition: "Mendung" 
    }
};

const button = document.querySelector("button");
const input = document.querySelector("input");

button.addEventListener("click", function() {
    const city = input.value.trim();
    
    if(weatherData[city]) {
        const data = weatherData[city];
        console.log(`Cuaca di ${city}:`);
        console.log(`Suhu: ${data.temperature}°C`);
        console.log(`Kondisi: ${data.condition}`);
    } else {
        console.log(`Data cuaca untuk ${city} tidak ditemukan.`);
    }
});
