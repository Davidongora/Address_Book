function exportToJson(data) {
  const jsonData = JSON.stringify(data, null, 2);
  const fileData = jsonData + '\n';
  const downloadLink = document.createElement('a');
  downloadLink.href = URL.createObjectURL(new Blob([fileData], { type: 'application/json' }));
  downloadLink.download = 'address_data.json';
  downloadLink.click();
  URL.revokeObjectURL(downloadLink.href);
}
