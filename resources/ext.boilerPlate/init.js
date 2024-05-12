
async function takeSummary() {

  console.log("Le résumé a été pris !");

  // Envoie de la requête à l'API
  const logAndStoreURL = () => {
    const currentPageURL = window.location.href;
    console.log(currentPageURL)
    return currentPageURL
  }
  const API_KEY = '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';
  const apiUrl = 'https://api.openai.com/v1/chat/completions';

  try {
    const response = await fetch(apiUrl, {
      methode: 'POST',
      headers: {
        'content-Type': 'application/json',
        'Authorization': `Bearer ${API_KEY}`
      },
      body: JSON.stringify({
        model: 'gpt-3.5-turbo',
        messages: [{ role: 'user', content: `Fais moi le résumé de cette url: ${logAndStoreURL()}, maximum 450 mots.` }],
        max_tokens: 100
      })
    });
    const data = await response.json();

    console.log("Lq response de l'API est :", data.choices[0].message); // Récupération du text de la préponse de l'IA
    //Ici nous pouvons afficher la réponse dans le chat
  } catch (error) {
    console.error("Erreur lors de la requête de l'API :", error)
  }

}

const button = document.querySelector(".mw-htmlform-submit");
button.addEventListener("click", takeSummary);
