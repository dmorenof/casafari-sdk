# Pendientes — casafari-sdk

> **Estado:** hoja de ruta; NO equivale a funcionalidades implementadas.
>
> **Línea base estable:** `dmorenof/casafari-sdk` **v0.1.0** (SDK escrito a mano para el CRM API v1; no depende de `sdk-runtime` ni de `sdk-generator`).
>
> **Criterio de actualización:** `[x]` significa implementado y verificado con pruebas y CI; anotar la versión publicada.

## Leyenda

Igual en los tres repositorios:

- **P0:** bloqueante; **P1:** importante para producción; **P2:** avanzado; **P3:** adicional.
- **Parcial:** implementación limitada; la casilla sigue abierta.

## Orden global de trabajo (acordado 2026-11-10)

Idéntico en los tres repositorios.

1. **sdk-runtime:** cubrir lo necesario para servir a cualquier API y congelar su API pública (1.0).
2. **sdk-generator:** cumplir las especificaciones más importantes (Swagger 2.0, OpenAPI 3.0/3.1) sobre ese runtime.
3. **casafari-sdk:** evaluar y, si procede, migrar a un SDK generado.

Este repositorio no recibe cambios de migración hasta cerrar las fases 1 y 2. Mientras tanto solo se mantiene (correcciones y dependencias).

## Actualización 2026-11-20

- [x] **Contrato aclarado:** Casafari publica su especificación OpenAPI 3.1 en https://docs.api.casafari.com/openapi.json (API REST, 46 operaciones, OAuth2 client credentials y bearer). `contract/openapi.json` la sustituye y el SDK se genera de ella (0.6.0). El CRM API v1 queda solo en 0.5.x.
- [ ] Verificar con credenciales reales (requiere autorización del titular) y decidir qué hacer con los consumidores de 0.5.x.

## 0. Línea base ya disponible

- [x] Cobertura completa del Casafari **CRM API v1** (`contract/v1.json`): Agency, Entity, Leads, CasafariGo, CodeTable y Property, con DTOs y colecciones tipadas.
- [x] Middlewares (`EchoMiddleware`, `LogMiddleware`) y pruebas con HTTP simulado (contrato Swagger, rutas y cobertura).
- [x] Licencia MIT, `NOTICE.md`, CI con matriz PHP, auditoría de dependencias y publicación automática por `VERSION` en Packagist.

## 1. Fase 3: evaluación y migración (tras las fases 1 y 2)

- [ ] **Aclarar el contrato:** este SDK cubre el CRM API v1; el SDK generado de la suite del generador cubre la API REST de `platform.casafari.com`. Decidir si ambos contratos se mantienen.
- [x] Generar un SDK desde `contract/v1.json` con el generador estable (sdk-generator 1.5.0) y comparar su API pública con la actual: 14 operaciones, mismas peticiones (método, URL y cuerpo) en 13 de 14 con los mismos datos; `CodeTable` difiere solo en el booleano de la query (`true` frente a `1`). En la rama `claude/busy-franklin-9x9zpa`, sin fusionar.
- [ ] Verificar con la API real el desajuste de `Locations` (el SDK anterior lo modelaba como colección; el contrato y el SDK generado, como objeto único `LocationList`) y el formato de los booleanos de la query (`true` frente a `1`).
- [ ] Decidir la estrategia: sustituir el código manual manteniendo compatibilidad (capa de adaptación o major nuevo) o mantener los dos paquetes.
- [ ] Probar operaciones representativas con credenciales reales y comparar respuestas con las del SDK actual. Requiere autorización del titular de las credenciales.
- [ ] Plan de rollback y guía de migración para consumidores de v0.1.x.
- [ ] Dependencia estable de `dmorenof/sdk-runtime` publicada en Packagist (sin ramas ni VCS temporales).

## 2. Mantenimiento mientras tanto

- [ ] Mantener verdes las comprobaciones `test` y `validate` y las actualizaciones de Dependabot.
- [ ] Ampliar pruebas del contrato actual solo si se detectan discrepancias con la API real.

## Historial de seguimiento

| Fecha | Cambio | Referencia |
| --- | --- | --- |
| 2026-11-10 | Se crea esta hoja de ruta con la leyenda común y el orden global runtime → generador → Casafari. | Conversación de planificación |
