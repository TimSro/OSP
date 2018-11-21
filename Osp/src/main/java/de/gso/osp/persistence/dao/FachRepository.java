package de.gso.osp.persistence.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Fach;

public interface FachRepository  extends JpaRepository<Fach, Long> {
	Fach findByName(String name);

	@Override
	void delete(Fach fach);
}

