package de.gso.osp.web.controller;

import java.util.Date;
import java.util.List;
import java.util.Vector;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import de.gso.osp.persistence.dao.KalenderEintragRepository;
import de.gso.osp.persistence.model.Benutzer;
import de.gso.osp.persistence.model.KalenderEintrag;

@Controller
public class KalenderController {

	@Autowired
	KalenderEintragRepository kalenderEintragRepository;
	
	@RequestMapping(value = "/kalender", method = RequestMethod.GET)
	public String getBenutzerKalender(Model model) {
		
		// FIXME hier den Kalendereintrag für den heutigen Tag anzeigen
		Benutzer benutzer = new Benutzer();
		Date date = new Date();
		List<KalenderEintrag> kalenderEinträge = kalenderEintragRepository.findByBenutzer(benutzer);
		kalenderEinträge.stream().filter(e -> (e.getDatum() == date));
		List<String> notizen = new Vector<>();
        model.addAttribute("notiz", notizen);
        return "notiz";
	}
}
