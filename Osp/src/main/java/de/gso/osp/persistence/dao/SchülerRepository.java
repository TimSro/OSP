package de.gso.osp.persistence.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Schüler;

public interface SchülerRepository  extends JpaRepository<Schüler, Long> {
	Schüler findByName(String name);

	@Override
	void delete(Schüler schüler);
}
