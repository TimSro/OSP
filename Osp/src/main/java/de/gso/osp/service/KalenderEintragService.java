package de.gso.osp.service;

import java.util.List;

import javax.transaction.Transactional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import de.gso.osp.persistence.dao.KalenderEintragRepository;
import de.gso.osp.persistence.model.Benutzer;
import de.gso.osp.persistence.model.KalenderEintrag;

@Service
@Transactional
public class KalenderEintragService{

	@Autowired
	KalenderEintragRepository kalenderEintragRepository;
	
	public List<KalenderEintrag> getTransactionsForUser(Benutzer benutzer) {
		List<KalenderEintrag> todos =  kalenderEintragRepository.findByBenutzer(benutzer);
		return todos;
	}
	
}