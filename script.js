const form = document.getElementById("formMahasiswa");
const tabel = document.querySelector("#tabelMahasiswa tbody");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const nama = document.getElementById("nama").value.trim();
  const nim = document.getElementById("nim").value.trim();
  const semester = document.getElementById("semester").value.trim();
  const prodi = document.getElementById("prodi").value;
  const email = document.getElementById("email").value.trim();

  if (!nama || !nim || !semester || !prodi || !email) {
    alert("Mohon isi semua data!");
    return;
  }
  console.log("Data Mahasiswa");
  console.log("Nama Lengkap :", nama);
  console.log("NIM          :", nim);
  console.log("Semester     :", semester);
  console.log("Program Studi:", prodi);
  console.log("Email        :", email);

  const no = tabel.rows.length + 1;

  const row = document.createElement("tr");
  row.innerHTML = `
    <td>${no}</td>
    <td>${nama}</td>
    <td>
      <div class="info-cell">
        <div>Prodi: ${prodi}</div>
        <div>Semester: ${semester}</div>
      </div>
    </td>
  `;

  tabel.appendChild(row);
  form.reset();
});