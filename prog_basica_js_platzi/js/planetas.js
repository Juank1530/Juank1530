var g_tierra = 9.8;
var g_marte = 3.7;
var g_jupiter = 24.8;
var peso_final;


var user = parseFloat(prompt("¿Cuál es tu peso?"));
var peso = user;
if (isNaN(peso)) {
  document.write("El valor ingresado, no es un número. Así es imposible calcular tu peso :/");
} else {
  var nom_planeta = prompt("Elige en planeta dónde quieres saber tu peso:\n 1 Para Marte, 2 Para Jupiter");
  var planeta = parseFloat(nom_planeta);
  if (isNaN(nom_planeta)) {
    document.write("Tu peso en <strong>" + nom_planeta + "</strong> es<strong> 1'000.000 kilos, seas mamon. Ingresa datos validos. :/</strong>");
  } else {
    if (planeta < 1 || planeta > 2) {
      document.write("<strong>" + planeta + "</strong> No es una opción validad para planeta.");
      document.write(" Lo sentimos pero no es posible calcular tu peso.<br><strong> :( Debes seleccionar una opción valida</strong>");
    } else {
      if (planeta == 1) {
        var planeta = "Marte";
        peso_final = peso * g_marte / g_tierra;
        document.write("Por ejemplo tu peso en la <strong>Tierra es " + peso + " kilos</strong> pero tu peso en <strong>" + planeta + "</strong> es: <strong>" + peso_final.toFixed(2) + " Kilos</strong> apróximadamente.");
      } else {
        var planeta = "Jupiter";
        peso_final = peso * g_jupiter / g_tierra;
        document.write("Por ejemplo tu peso en la <strong>Tierre es " + peso + " kilos</strong> pero tu peso en <strong>" + planeta + "</strong> es: <strong>" + peso_final.toFixed(2) + " Kilos</strong> apróximadamente.");
      }
    }
  }
}
