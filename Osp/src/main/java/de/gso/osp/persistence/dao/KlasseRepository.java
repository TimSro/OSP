package de.gso.osp.persistence.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Klasse;

public interface KlasseRepository  extends JpaRepository<Klasse, Long> {
	Klasse findByName(String name);

	@Override
	void delete(Klasse klasse);
}
