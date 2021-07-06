
function formatarDataBr(dateLocal, formato) {
	formato = formato || "DD/MM/YYYY";

	moment.locale("pt-br");
	var dataFormatada = moment(dateLocal).format(formato);
	return dataFormatada;
}

function formatarDataHoraBr(dateLocal) {
	return formatarDataBr(dateLocal, "DD/MM/YYYY HH:mm:ss");
}
