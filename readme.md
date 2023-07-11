esercizio: PHP OOP 3

La programmazione orientata agli oggetti è prima di tutto un concetto di progettazione e si basa sull'idea di dividere il codice in "oggetti", ciascuno dei quali rappresenta un'entità o un concetto della logica dell'applicazione.
Il vostro compito sarà implementare la logica discussa stamattina sui sistemi di comunicazione utilizzando i concetti della OOP visti finora.
Considerate che:
- tutte le comunicazioni hanno alcune proprietà in comune come mittente, titolo, messaggio e destinatari;
- le email possono avere degli allegati;
- le email possono avere la notifica di consegna;
- le email può essere inoltrate o stampate;
- gli sms possono avere la notifica di lettura;
- gli sms possono accettare una risposta da parte del destinatario;
- le notifiche push possono avere un'icona;
- al click sulla notifica push viene azionato un evento;
- ogni tipologia di comunicazione ha un suono di avviso all'arrivo di una nuova comunicazione;
- ogni tipologia di comunicazione ha un colore LED per avvisare che c'è una nuova comunicazione;

Il focus di questo esercizio è la progettazione e l'implementazione di classi utilizzando il paradigma della programmazione orientata agli oggetti. L'obiettivo è simulare il comportamento di tali sistemi, ma non dovranno inviare comunicazioni reali.
Per esempio, il vostro metodo invia() potrebbe semplicemente stampare un messaggio a schermo per indicare che una comunicazione è stata "inviata". Ogni tipo di comunicazione stamperà una stringa personalizzata in base al proprio tipo (es.: "email inviata", "sms inviato", "notifica inviata"), quindi occorrerà ridefinire il metodo in ogni classe derivata.