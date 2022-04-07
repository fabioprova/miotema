const themeMap = {
	
  site1: "sito1",
  site2: "sito2",
  
};

const theme = localStorage.getItem('theme')
  || (tmp = Object.keys(themeMap)[0],
      localStorage.setItem('theme', tmp),
      tmp);
	  
function cambia_sito() {
	
	var p = prompt("Inserisci password: ");
	
	if(p == "python"){
		const current = localStorage.getItem('theme');
		const next = themeMap[current];
		localStorage.setItem('theme', next);
		
		console.log("sito2");
	
	}
	
	else{
			
		localStorage.setItem('theme', Object.keys(themeMap)[0],);	
		console.log("sito1");
		
	}
  
  
}
