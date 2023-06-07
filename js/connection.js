document.querySelector('#id_estado').addEventListener('change', event => {
    console.log(event.target.value);
    fetch('municipios.php?id_estado=' + event.target.value)
        .then(res => {
            if (!res.ok) {
                throw new Error('Hubo un error en la respuesta');
            } //en if
            return res.json();
        })
        .then(datos => {
            let html = '<option value="">Seleccionar ciudades</option>';
            if (datos.data.length > 0) {
                for (let i = 0; i < datos.data.length; i++) {
                    html += `<option value="${datos.data[i].id_municipio}">${datos.data[i].municipio}</option>`;
                } //end for
            } //end if
            document.querySelector('#municipios').innerHTML = html;
        })
        .catch(error => {
            console.error('Ocurrió un error ' + error);
        });
});
