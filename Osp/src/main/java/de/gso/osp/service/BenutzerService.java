package de.gso.osp.service;


import javax.transaction.Transactional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import de.gso.osp.persistence.dao.BenutzerRepository;
import de.gso.osp.persistence.model.Benutzer;

@Service
@Transactional
public class BenutzerService{

	@Autowired
	BenutzerRepository benutzerRepository;
	
	public Benutzer getBenutzerForName(String name) {
		Benutzer benutzer = benutzerRepository.findByName(name);
		return benutzer;
	}
	
}
