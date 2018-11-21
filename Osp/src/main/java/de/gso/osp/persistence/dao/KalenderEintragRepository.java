package de.gso.osp.persistence.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Benutzer;
import de.gso.osp.persistence.model.KalenderEintrag;

public interface KalenderEintragRepository  extends JpaRepository<KalenderEintrag, Long> {
	KalenderEintrag findByKalenderKey(String kalenderKey);
	
	List<KalenderEintrag> findByBenutzer(Benutzer benutzer);

	@Override
	void delete(KalenderEintrag kalenderEintrag);
}
