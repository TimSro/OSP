package de.gso.osp.persistence.dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import de.gso.osp.persistence.model.Benutzer;
import de.gso.osp.persistence.model.Todo;

public interface TodoRepository  extends JpaRepository<Todo, Long> {
	Todo findByTodoKey(String todoKey);

	List<Todo> findByBenutzer(Benutzer benutzer);
	
	@Override
	void delete(Todo todo);

}
