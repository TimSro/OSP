package de.gso.osp.persistence.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Benutzer;

public interface BenutzerRepository  extends JpaRepository<Benutzer, Long> {
	Benutzer findByName(String name);

	@Override
	void delete(Benutzer benutzer);

}
