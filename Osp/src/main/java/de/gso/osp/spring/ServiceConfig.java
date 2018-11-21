package de.gso.osp.spring;

import org.springframework.context.annotation.ComponentScan;
import org.springframework.context.annotation.Configuration;

@Configuration
@ComponentScan({ "de.gso.osp.service" })
public class ServiceConfig {
}