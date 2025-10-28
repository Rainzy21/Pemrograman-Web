let mahasiswaData = [];
let counter = 0;

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('mahasiswaForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const nama = document.getElementById('nama').value;
        const nim = document.getElementById('nim').value;
        const semester = document.getElementById('semester').value;
        const programStudi = document.getElementById('program-studi').value;
        const email = document.getElementById('email').value;

        const mahasiswa = {
            nama,
            nim,
            semester,
            programStudi,
            email
        };


        mahasiswaData.push(mahasiswa);
        counter++;

        console.log('Data Mahasiswa baru ditambahkan:');
        console.log(mahasiswa);
        console.log(`Total data yang telah diupdate: ${counter}`);

        updateTable();
        updateInfoMahasiswa();

        form.reset();
    });
});

function updateTable() {
    const tableBody = document.getElementById('mahasiswaTableBody');
    tableBody.innerHTML = '';

        mahasiswaData.forEach((mahasiswa, index) => {
            const row = document.createElement('tr');
            const info = `Prodi: ${mahasiswa.programStudi}, Semester: ${mahasiswa.semester}`;
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${mahasiswa.nama}</td>
                <td>${info}</td>
            `;
            tableBody.appendChild(row);
        });
}

function updateInfoMahasiswa() {
    const infoContainer = document.getElementById('infoMahasiswa');
    
    const groupByProdi = {};
    const groupBySemester = {};
    
    mahasiswaData.forEach(mahasiswa => {

        if (!groupByProdi[mahasiswa.programStudi]) {
            groupByProdi[mahasiswa.programStudi] = 0;
        }
        groupByProdi[mahasiswa.programStudi]++;
        

        if (!groupBySemester[mahasiswa.semester]) {
            groupBySemester[mahasiswa.semester] = 0;
        }
        groupBySemester[mahasiswa.semester]++;
    });
    

    let infoHTML = '<div class="info-section">';
    

    infoHTML += '<h3>Informasi Program Studi:</h3>';
    for (const prodi in groupByProdi) {
        infoHTML += `<p>${prodi}: ${groupByProdi[prodi]} mahasiswa</p>`;
    }
    
    
    infoHTML += '<h3>Informasi Semester:</h3>';
    const sortedSemesters = Object.keys(groupBySemester).sort((a, b) => a - b);
    sortedSemesters.forEach(semester => {
        infoHTML += `<p>Semester ${semester}: ${groupBySemester[semester]} mahasiswa</p>`;
    });
    
    infoHTML += '</div>';
    infoContainer.innerHTML = infoHTML;
}