package de.gso.osp.persistence.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.KalenderEintrag;

public interface KalenderEintragRepository  extends JpaRepository<KalenderEintrag, Long> {
	KalenderEintrag findByIdentKey(String identKey);

	@Override
	void delete(KalenderEintrag kalenderEintrag);
}
