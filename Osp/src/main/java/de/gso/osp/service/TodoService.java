package de.gso.osp.service;

import java.util.List;

import javax.transaction.Transactional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import de.gso.osp.persistence.dao.TodoRepository;
import de.gso.osp.persistence.model.Benutzer;
import de.gso.osp.persistence.model.Todo;


@Service
@Transactional
public class TodoService{

	@Autowired
	TodoRepository todoRepository;
	
	public List<Todo> getTransactionsForBenutzer(Benutzer benutzer) {
		List<Todo> todos =  todoRepository.findByBenutzer(benutzer);
		return todos;
	}
	
}
