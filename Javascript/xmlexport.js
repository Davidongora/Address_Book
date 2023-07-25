// Function to convert data to XML format and initiate download
function exportToXml(data) {
    let xmlData = `<?xml version="1.0" encoding="UTF-8"?><AddressData>`;
  
    for (let i = 0; i < data.length; i++) {
      xmlData += `<Address>`;
      xmlData += `<Num>${data[i].Num}</Num>`;
      xmlData += `<Name>${data[i].Name}</Name>`;
      xmlData += `<FirstName>${data[i].FirstName}</FirstName>`;
      xmlData += `<Email>${data[i].Email}</Email>`;
      xmlData += `<Street>${data[i].Street}</Street>`;
      xmlData += `<ZipCode>${data[i].ZipCode}</ZipCode>`;
      xmlData += `<City>${data[i].City}</City>`;
      xmlData += `</Address>`;
    }
  
    xmlData += `</AddressData>`;
    const blob = new Blob([xmlData], { type: 'application/xml' });
  
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'address_data.xml';
  
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  }
  
  const data = []; 
  
  document.getElementById('ExportToXML').addEventListener('click', function () {
    exportToXml(data);
  });
  